@echo off
set /p tex=Indica el texto del archivo:
set /p rut=Indica la ruta:
set /p find=Indica el texto a buscar:
find /n "%find%" %rut%\%tex%
pause