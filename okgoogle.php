#!/usr/bin/env php
<?php
require(__DIR__.'/vendor/autoload.php');

if ($_SERVER['argc'] <= 1) {
    echo "usage: $0 <query> \n";
    exit(1);
}

$config = parse_ini_file(__DIR__.'/config.ini', true);

$scope = $config['oauth']['scopes'];
$auth = Google\Auth\ApplicationDefaultCredentials::getCredentials($scope);

$opts = [
  'credentials' => Grpc\ChannelCredentials::createSsl(),
  'update_metadata' => $auth->getUpdateMetadataFunc(),
];

$assistantClient = new Google\Assistant\Embedded\V1alpha2\EmbeddedAssistantClient(
    $config['device']['endpoint'],
    $opts
);
$assistConfig = new Google\Assistant\Embedded\V1alpha2\AssistConfig();
$assistConfig->setTextQuery(implode(' ', array_slice($_SERVER['argv'],1)));
$audioOutConfig = new Google\Assistant\Embedded\V1alpha2\AudioOutConfig();
$audioOutConfig->setEncoding(Google\Assistant\Embedded\V1alpha2\AudioOutConfig\Encoding::LINEAR16);
$audioOutConfig->setSampleRateHertz(16000);
$audioOutConfig->setVolumePercentage(0);
$assistConfig->setAudioOutConfig($audioOutConfig);
$deviceConfig = new Google\Assistant\Embedded\V1alpha2\DeviceConfig();
$deviceConfig->setDeviceId($config['device']['device_id']);
$deviceConfig->setDeviceModelId($config['device']['device_model_id']);
$assistConfig->setDeviceConfig($deviceConfig);
$dialogStateIn = new Google\Assistant\Embedded\V1alpha2\DialogStateIn();
$dialogStateIn->setLanguageCode($config['device']['language_code']);
$dialogStateIn->setIsNewConversation(true);
$assistConfig->setDialogStateIn($dialogStateIn);
$request = new Google\Assistant\Embedded\V1alpha2\AssistRequest(
    ['config' => $assistConfig]
);

$g = $assistantClient->Assist();
$g->write($request);
while ($response = $g->read()) {
    $out = $response->getDialogStateOut();
    if ($out === null) continue;
    $text = $out->getSupplementalDisplayText();
    if ($text === "") continue;
    echo $text, "\n";
}
$g->writesDone();
