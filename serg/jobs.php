<?php

class job {
    public $title;
    public $description;
    public $visible;
    public $months;
}



$job1 = new job();
$job1->title = 'PHP Developer';
$job1->description = 'This is an awesome job!!';
$job1->visible = true;
$job1->months = 16;



$jobs = [
    $job1
    // [
    //   'title' => 'PHP Developer',
    //   'description' => 'This is an awesome job!!!',
    //   'visible' => true,
    //   'months' => 16,
    // ],
    // [
    //   'title' => 'Python Dev',
    //   'description' => 'Esta es la descripción de Python Dev',
    //   'visible' => false,
    //   'months' => 14,
    // ],
    // [
    //   'title' => 'Devops',
    //   'description' => '',
    //   'visible' => false,
    //   'months' => 5,
    // ],
    // [
    //   'title' => 'Node dev',
    //   'description' => '',
    //   'visible' => true,
    //   'months' => 24,
    // ],
    // [
    //   'title' => 'Frontend dev',
    //   'description' => '',
    //   'visible' => true,
    //   'months' => 3,
    // ],
  ];

  function getDuration($months){
    $years = floor($months / 12);
    $extraMonths = $months % 12;
  
    return "$years years $extraMonths months";
  }
  
  function printJob($job) {
  
    if($job->visible != true){
      return;
    }
  
    echo '<li class="work-position">';
    echo  '<h5>' . $job->title . '</h5>';
    echo  '<p>' . $job->description . '</p>';
    echo  '<p>' . getDuration($job->months) . '</p>';
  
    echo  '<strong>Achievements:</strong>';
    echo  '<ul>';
    echo  '  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo  '  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo  '  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo  '</ul>';
    echo	'</li>';
  }