<?php

function checkTemperature($data)
{
    if ($data["value"] > 100) {
        $data["status"] = "HIGH";
        $data["message"] = "Fever detected";
    } else {
        $data["status"] = "NORMAL";
        $data["message"] = "Temperature normal";
    }
    return $data;
}

function checkPulse($data)
{
    if ($data["value"] > 100) {
        $data["status"] = "HIGH";
        $data["message"] = "Pulse rate high";
    } else {
        $data["status"] = "NORMAL";
        $data["message"] = "Pulse rate normal";
    }
    return $data;
}

function checkBloodPressure($data)
{
    list($systolic, $diastolic) = explode("/", $data["value"]);

    if ($systolic > 130 || $diastolic > 90) {
        $data["status"] = "HIGH";
        $data["message"] = "Blood pressure high";
    } else {
        $data["status"] = "NORMAL";
        $data["message"] = "Blood pressure normal";
    }
    return $data;
}
