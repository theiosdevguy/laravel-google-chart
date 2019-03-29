<?php

namespace Scopdrag\LaravelGoogleChart\Contracts;

interface Factory {

    public function setId();

    public function getId();

    public function setChartType($type);

    public function getChartType();

    public function setOptions($options);

    public function setCols($cols = []);

    public function getCols();

    public function setRows($rows = []);

    public function render();

    public function setMerchant($merchant_details);

    public function getMerchant();

    public function setView($view_page);

    public function getView();

}
