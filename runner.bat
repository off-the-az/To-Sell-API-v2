@ECHO off
if /I %1 == run goto :load-server
if /I %1 == controller goto :create-c
if /I %1 == middleware goto :create-mid
if /I %1 == migration-new goto :migration-new
if /I %1 == migrate goto :migrate

:load-server
C:\OSPanel\modules\php\PHP_8.0\php.exe artisan serve
goto :eof

:create-c
set /p Input=Enter controller name:
C:\OSPanel\modules\php\PHP_8.0\php.exe artisan make:controller %Input%
goto :eof

:create-mid
set /p Input=Enter middleware name:
C:\OSPanel\modules\php\PHP_8.0\php.exe artisan make:middleware %Input%
goto :eof

:migrate
C:\OSPanel\modules\php\PHP_8.0\php.exe artisan migrate
goto :eof

:migration-new
set /p Input=Enter migration name:
C:\OSPanel\modules\php\PHP_8.0\php.exe artisan make:migration %Input%
goto :eof
