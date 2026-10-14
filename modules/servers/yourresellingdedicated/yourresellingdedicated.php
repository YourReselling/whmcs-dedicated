<?php

declare(strict_types=1);

if (! defined('WHMCS')) {
    exit('Direct access is not permitted.');
}

require_once __DIR__.'/bootstrap.php';

use YourReselling\Whmcs\Dedicated\Integration\WhmcsModule;

/** Dedicated Server: MetaData. */
function yourresellingdedicated_MetaData(): array
{
    return ['DisplayName' => 'Your-Reselling · Dedicated Server', 'APIVersion' => '1.1', 'RequiresServer' => true];
}

/** Dedicated Server: ConfigOptions. */
function yourresellingdedicated_ConfigOptions(): array
{
    return WhmcsModule::configOptions('dedicated');
}

/** Dedicated Server: CreateAccount. */
function yourresellingdedicated_CreateAccount(array $params): string
{
    return WhmcsModule::run('dedicated', 'create', $params);
}

/** Dedicated Server: TestConnection. */
function yourresellingdedicated_TestConnection(array $params): array
{
    return WhmcsModule::testConnection($params);
}

/** Dedicated Server: ClientArea. */
function yourresellingdedicated_ClientArea(array $params): array
{
    return WhmcsModule::clientArea('dedicated', $params);
}

/** Dedicated Server: AdminCustomButtonArray. */
function yourresellingdedicated_AdminCustomButtonArray(): array
{
    return WhmcsModule::adminButtons('dedicated');
}

/** Dedicated Server: RefreshStatus. */
function yourresellingdedicated_RefreshStatus(array $params): string
{
    return WhmcsModule::run('dedicated', 'refresh', $params);
}

/** Dedicated Server: TerminateAccount. */
function yourresellingdedicated_TerminateAccount(array $params): string
{
    return WhmcsModule::run('dedicated', 'termination', $params);
}
