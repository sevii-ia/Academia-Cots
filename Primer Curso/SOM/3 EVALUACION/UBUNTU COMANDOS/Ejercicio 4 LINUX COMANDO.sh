cd /home/vsevolod
ls -la ..
ls -S
ls -R
mkdir -p ANO_2019 ANO_2019/ALBARANES ANO_2019/FACTURAS ANO_2019/NOMINAS
mkdir -p ANO_2019/NOMINAS/PRIMER_TRI ANO_2019/NOMINAS/SEGUNDO_TRI
cd ANO_2019/NOMINAS/PRIMER_TRI
touch NOM_ENERO
cat > NOM_ENERO
NÓMINA DE ENERO:
LUIS SÁNCHEZ 1.200 €.
cd ../../../..
mv vsevolod/ANO_2019 vsevolod/ANOACTUAL
mv vsevolod/ANOACTUAL/ALBARANES vsevolod/ANOACTUAL/FACTURAS 
cp -r vsevolod/ANOACTUAL/NOMINAS vsevolod/ANOACTUAL/COPIANOMINAS
cat vsevolod/ANOACTUAL/NOMINAS/PRIMER_TRI/NOM_ENERO
cat > observaciones
Durante el curso 2019 se guardaran todos los documentos
ls -l #-rw-r--r--
chmod u=rwx,go=r observaciones
chmod 733 observaciones
rm -r vsevolod/ANOACTUAL/COPIANOMINAS
cat > OBSERVACIONES2
Los alumnos que incumplan las normas seran amonestados y los que las cumplan tendran un punto extra
cat observaciones OBSERVACIONES2 > OBSERVACIONES2019
cat OBSERVACIONES2019
rm observaciones
chmod u=rwx,g=r,o-rwx OBSERVACIONES2019
chmod 740 OBSERVARCIONES2019
chmod g+x OBSERVARCIONES2019
chmod 740 OBSERVARCIONES2019
chmod a-x OBSERVACIONES2019
chmod 640 OBSERVACIONES2019
