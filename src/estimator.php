<?php

$data = $_POST;
// return (challenge($data));

header('Location: /Results.php');


function covid19ImpactEstimator($data)
{
  $this->challenge($data);
  return $data;
}

function challenge($data)
{
// var_dump($data);die;
$data_population = $data['data-population'];
  $data_time_to_elapse = $data['data-time-to-elapse'];
  $data_reported_cases = $data['data-reported-cases'];
  $data_total_hospital_beds = $data['data-total-hospital-beds'];
  $data_period_type = $data['data-period-type'];


  if ($data_period_type == 'Months') {
    $data_period_type = $data_period_type / 30;
  } elseif ($data_period_type == 'Weeks') {
    $data_period_type = $data_period_type / 7;
  }

  $earning_rate = 27;

  // Impact

  // Challenge 1

  $impact_currentlyInfected = $data_reported_cases * 10;
  $impact_infectionsByRequestedTime = $impact_currentlyInfected * pow(2, $data_period_type);


  // Challenge 2

  $impact_severeCasesByRequestedTime = 15 / 100 * $impact_infectionsByRequestedTime;
  $impact_hospitalBedsByRequestedTime = 35 / 100 * $impact_severeCasesByRequestedTime;

  // Challenge 3
  $impact_casesForICUByRequestedTime = 5 / 100 * $impact_infectionsByRequestedTime;
  $impact_casesForVentilatorsByRequestedTime = 2 / 100 * $impact_infectionsByRequestedTime;
  $impact_dollarsInFlight = $impact_infectionsByRequestedTime * $earning_rate * $data_period_type;


  // Sever impact

  // Challenge 1

  $sever_currentlyInfected = $data_reported_cases * 50;
  $sever_infectionsByRequestedTime = $sever_currentlyInfected * pow(2, $data_period_type);

  // Challenge 2
  $sever_severeCasesByRequestedTime = 15 / 100 * $sever_infectionsByRequestedTime;
  $sever_hospitalBedsByRequestedTime = 35 / 100 * $sever_severeCasesByRequestedTime;

  // Challenge 3
  $sever_casesForICUByRequestedTime = 5 / 100 * $sever_infectionsByRequestedTime;
  $sever_casesForVentilatorsByRequestedTime = 2 / 100 * $sever_infectionsByRequestedTime;
  $sever_dollarsInFlight = $sever_infectionsByRequestedTime * $earning_rate * $data_period_type;


  // Impact Object
  $impact_object = new stdClass();
  $impact_object->currentlyInfected = $impact_currentlyInfected;
  $impact_object->infectionsByRequestedTime = $impact_infectionsByRequestedTime;
  $impact_object->severeCasesByRequestedTime = $impact_severeCasesByRequestedTime;
  $impact_object->hospitalBedsByRequestedTime = $impact_hospitalBedsByRequestedTime;
  $impact_object->casesForICUByRequestedTime = $impact_casesForICUByRequestedTime;
  $impact_object->casesForVentilatorsByRequestedTime = $impact_casesForVentilatorsByRequestedTime;
  $impact_object->dollarsInFlight = $impact_dollarsInFlight;


  // Sever impact Object
  $sever_object = new stdClass();
  $sever_object->currentlyInfected = $sever_currentlyInfected;
  $sever_object->infectionsByRequestedTime = $sever_infectionsByRequestedTime;
  $sever_object->severeCasesByRequestedTime = $sever_severeCasesByRequestedTime;
  $sever_object->hospitalBedsByRequestedTime = $sever_hospitalBedsByRequestedTime;
  $sever_object->casesForICUByRequestedTime = $sever_casesForICUByRequestedTime;
  $sever_object->casesForVentilatorsByRequestedTime = $sever_casesForVentilatorsByRequestedTime;
  $sever_object->dollarsInFlight = $sever_dollarsInFlight;


  $data = new stdClass();
  $data->data = $data;
  $data->impact = $impact_object;
  $data->severeImpact = $sever_object;
  return ($data);
}
