<?php

class DatabaseLogger
{
    public function logStore(string $message)
    {
        // ..
    }
}

class MailerService
{
    private DatabaseLogger $logger;

    public function __construct(DatabaseLogger $logger)
    {
        $this->logger = $logger;
    }

    public function sendEmail(): void
    {
        try {
            // ..
        } catch (\Exception $exception) {
            $this->logger->logStore($exception->getMessage());
        }
    }
}

// Usage
$databaseLogger = new DatabaseLogger();
$mailerService = new MailerService($databaseLogger);
$mailerService->sendEmail();
