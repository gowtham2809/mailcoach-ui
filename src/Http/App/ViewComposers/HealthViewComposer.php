<?php

namespace Spatie\MailcoachUi\Http\App\ViewComposers;

use Illuminate\View\View;
use Spatie\Mailcoach\Domain\Shared\Support\HorizonStatus;
use Spatie\MailcoachUi\Support\MailConfiguration\MailConfiguration;

class HealthViewComposer
{
    protected HorizonStatus $horizonStatus;

    protected MailConfiguration $mailConfiguration;

    public function __construct(HorizonStatus $horizonStatus, MailConfiguration $mailConfiguration)
    {
        $this->horizonStatus = $horizonStatus;

        $this->mailConfiguration = $mailConfiguration;
    }

    public function compose(View $view)
    {
        // disabled horizon health banner for vapor
        $view->with([
            'horizonActive' => true, //$this->horizonStatus->is(HorizonStatus::STATUS_ACTIVE),
            'mailConfigurationValid' => $this->mailConfiguration->isValid(),
            'queueConfig' => config('queue.connections.mailcoach-redis') && !empty(config('queue.connections.mailcoach-redis')),
        ]);
    }
}
