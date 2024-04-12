<?php

interface LoggerInterface
{
    public function logStore(string $message): void;
}

class DatabaseLogger implements LoggerInterface
{
    public function logStore(string $message): void
    {
        // ..
    }
}

class DatadogLogger implements LoggerInterface
{
    public function logStore(string $message): void
    {
        // ..
    }
}

class MailerService
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
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

$datadogLogger = new DatadogLogger();
$mailerService = new MailerService($datadogLogger);
$mailerService->sendEmail();
