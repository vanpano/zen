@echo off
pushd %~dp0

set HOME=%cd%
set US_ROOTF=%HOME%
set US_ROOTF=%US_ROOTF%:\=/%
set US_PHP_EXE=%US_ROOTF%\php\php.exe

"C:\XWeb\Human Emulator Studio 7.0.60\XWeb Human Emulator Studio RT.exe" /ip:"%~1" /port:"%~2" /script:"%~3" /script_args:"%~4" /in_tray:"%~5" & ping -n -f -w 1 5000 192.168.254.254 >nul

popd
pause