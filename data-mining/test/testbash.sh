#!/bin/bash
analistas=(Faitelson_ESPN CARLOSLGUERRERO GarciaPosti joserra_espn martinolimx ESPNCapitanes RaulOrvananos cprocuna J_Pietra memo_schutz R_SalazarTD ElGambeteroMx _Futb0leros_ Fab_Futbol LaReimers albertolati rafapuente_espn LRZague espnsutcliffe InvictosSomos ruubenrod alexblanco23 Rene_Tovar Leonlec rgomezjunco andremarinpuig mauriciopedroza ramosrizo fersch_4 Miguel_Gurwitz adelarosa_espn AlvaritoMorales GusMenFox Beto_Murrieta RusoEl23 SoyReferee ChiquimarcoMx diego_ornelas_ Mercader_ESPN Javier_Alarcon_ CarrilloPablo andresn Pellomaldonado jera_suarez SergioADippW)

echo "[" >> test-pull.json
for i in ${analistas[@]};
  do
    python3 users.py $i >> test-pull.json
  done
echo "]" >> test-pull.json
