<?php

namespace Php\Commands;

use Illuminate\Console\Command;
use Notification;
use Poppy\Framework\Exceptions\FakerException;
use Poppy\System\Models\PamAccount;
use src\Events\EventRunEvent;
use src\Events\JobSmEvent;
use src\Jobs\DeletePhpDemoJob;
use src\Models\PhpDemo;
use src\Notifications\SystemNotification;
use Symfony\Component\Console\Input\InputArgument;
use function Core\Commands\config;
use function Core\Commands\dispatch;
use function Core\Commands\event;
use function Core\Commands\py_faker;
use function Core\Commands\sys_debug;

/**
 * 使用命令行生成 api 文档
 */
class LaravelCommand extends Command
{

    protected $signature = 'php:laravel
		{type : Document type to run. [php]}
		{--exam_num=30,30 : Exam num, first is function, second is class method.}
	';

    protected $description = 'Generate Exam Document';

    /**
     * Execute the console command.
     * @throws FakerException
     */
    public function handle()
    {
        $type = $this->argument('type');
        switch ($type) {
            case 'event':
                event(new EventRunEvent());
                break;
            case 'job-sm-event':
                $item = PhpDemo::create([
                    'title' => py_faker()->paragraph(1),
                ]);
                sys_debug('php', __CLASS__, "id: {$item->id}, title:{$item->title}");
                event(new JobSmEvent($item));
                break;
            case 'notification':
                Notification::send(PamAccount::first(), new SystemNotification());
                break;
            case 'job-sm':
                $item  = PhpDemo::create([
                    'title' => py_faker()->paragraph(1),
                ]);
                $queue = config('queue.default');
                sys_debug('php', __CLASS__, "id: {$item->id}, title:{$item->title}, queue:{$queue}");
                dispatch(new DeletePhpDemoJob($item));
                break;
            default:
                $this->comment('Type is now allowed.');
                break;
        }
    }


    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['type', InputArgument::REQUIRED, ' Support Type [exam].'],
        ];
    }
}