<?php

// Access Control Routes
require 'Routes/AccessControls/login.php';
require 'Routes/AccessControls/logout.php';

// Home Route
require 'Routes/Home/home.php';

// Character Routes
require 'Routes/Character/character.php';
require 'Routes/Character/characterCreate.php';
require 'Routes/Character/characterProfile.php';

// Balance Routes
require 'Routes/Balance/balance.php';
require 'Routes/Balance/balanceApply.php';
require 'Routes/Balance/balanceViewApplication.php';

// Admin Routes
require 'Routes/Admin/admin.php';
require 'Routes/Admin/balanceRequest.php';
require 'Routes/Admin/BalanceRequestList.php';
