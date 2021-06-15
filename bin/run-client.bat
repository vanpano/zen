@echo off
pushd %~dp0

set HOME=%cd%
set US_ROOTF=%HOME%
set US_ROOTF=%US_ROOTF%:\=/%
set US_PHP_EXE=%US_ROOTF%\php\php.exe

set port = %1
set script = %2
set script_args = %3
set in_tray = %4

"C:\XWeb\Human Emulator Studio 7.0.60\XWeb Human Emulator Studio RT.exe" /port:"%port%" /script:"%script%" /script_args:"%script_args%" /in_tray:"%in_tray%"

popd
pause