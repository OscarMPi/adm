@echo off
setlocal enabledelayedexpansion

echo Starting batch replacement of @author Oscar with @author Oscar monteiro...
echo.

set "search= * @author Oscar"
set "replace= * @author Oscar monteiro"
set "count=0"

for /r "c:\laragon\www\adm\app" %%f in (*.php) do (
    findstr /c:"@author Oscar" "%%f" >nul 2>&1
    if !errorlevel! equ 0 (
        set /a count+=1
        echo Processing: %%f
        powershell -Command "(Get-Content '%%f' -Raw) -replace '@author Oscar', '@author Oscar monteiro' | Set-Content '%%f' -NoNewline"
    )
)

echo.
echo Completed! Updated !count! files.
pause
