cd \.
md microtec
cd microtec
md c:\microtec\admon\a2015\sem2 c:\microtec\admon\a2016\sem1\mes1
cd admon\a2016\sem1\mes1
md ..\..\..\..\sales\Alicante\centro
cd c:\microtec
md design
cd design
md ilustra copy prod
cd prod
md prod1 prod2
cd c:\microtec
tree
rd c:\microtec\design\prod\prod2 c:\microtec\admon\a2016\sem1\mes1
cd ..
cd design
ren ilustra ilus
move ilus prod
rd prod\prod1 ..\sales\Alicante\centro
tree c:\microtec