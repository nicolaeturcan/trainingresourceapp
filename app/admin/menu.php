<?php

Admin::menu()->url('/')->label('Dashboard')->icon('fa-dashboard');
Admin::menu()->url('training_resources')->label(trans_choice('admin::lang.trainings.title', 1))->icon('fa-globe');
//Admin::menu('\App\TrainingResource')->icon('fa-globe');
