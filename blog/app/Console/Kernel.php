<?php

namespace App\Console;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
   protected function schedule(Schedule $schedule)
    {
        $schedule->call(function(){
            if(Redis::llen('hys') != 0){
                $name = Redis::lrange('hys',0,-1);

                    foreach($name as $k=>$v){
                        $new[$k] = unserialize($v);
                    }
                    
                    foreach($new as $k=>$v){
                        $pdo = new PDO('mysql:host=47.95.197.85;dbname=laravel5.2','root','root');

                        $sql = 'insert into content2(`name`,content,time) value("'.$v['name'].'","'.$v['content'].'","'.$v['time'].'")';

                        $pdo->exec($sql);
                    }   

                $name = Redis::del('hys');
            }
        })->everyMinute();                 
    }


    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
