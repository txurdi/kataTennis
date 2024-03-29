KataTennis
=================
6 de Octubre de 2012.

## ¿Qué es esto?
Dentro del grupo "[katayunos.com](http://www.katayunos.com)" se ha organizado un evento el día 6 de Octubre en Bilbao.

## Kata elegida: KataTennis
Algoritmo para manejar la puntuacón tan especial de un partido de Tennis.

[Kata en solveet.com](http://www.solveet.com/exercises/Kata-Tennis/13)

[Kata en codingdojo.org](http://codingdojo.org/cgi-bin/wiki.pl?KataTennis)

## Planteamiento:
- Primera Iteración:
  - Jugador comienza con 0 puntos
  - 0 -15 - 30 -40 (secuencia de puntos)
  - Jugador con 40 puntos que vuelve a hacer puntos gana si el otro no tiene 40 puntos.
  - Si 2 jugadores tienen 40 puntos, se llama iguales

  - Los jugadores deben poder ganar puntos
  - Juego termina con un ganador
  - Manejar casiustica iguales

- Segunda Iteración:
  - Upside Down

- Tercera Iteración:
  - Sin usar tipos simples como string, int etc... (esta iteración la hice en otro ordenador)

- Cuarta Iteración:
  - Como la primera pero intentando llegar hasta el final.

## Conclusiones:
- En el grupo se nos hizo mucho más fácil pensar down-up que up-down
- Nos surgió la duda de si en los test hay que forzar la puntuación a cero al empezar o lo tomamos como requisito.

## Autores
- Igor Ormaetxebarria [@txurdi](http://twitter.com/txurdi)
- Resto de asistentes al katayuno


## Texto de Solveet

En esta kata, nos centraremos únicamente en el sistema de puntuaciones del tennis. El sistema de puntuaciones del tennis es del estilo "back and forth", que presenta un tipo distinto de puntuaciones de otras katas como podría ser la Kata Bownling.

Para simplificar la kata, sólo se jugará un set del partido. Una vez terminado, habrá un ganador.
Normas del tennis

Básicas
En el juego del tennis, un jugador comienza con puntación 0. Los puntos se ganan en la siguiente secuencia: 0 -> 15 -> 30 -> 40

Si un jugador consigue 40 y puntua de nuevo, el jugador gana el juego, siempre que el otro jugador no tenga 40 puntos en ese momento. Si los dos jugadores tienen al mismo tiempo 40 puntos, a esto se llama "iguales" (deuce en inglés)

Iguales
Puntuar durante iguales, da al jugador "ventaja". Si el otro jugador puntua en ese momento, la puntuación vuelve a iguales.

Si un jugador tiene "ventaja" y puntua de nuevo, el jugador gana el juego.
Requerimientos

Escribe un programa para manejar cada uno de los siguientes requerimientos de puntuación de dos jugadores del juego de tennis.
Los jugadores deben poder ganar puntos.
El juego debe terminar con un ganador.
Debes de manejar la casuística de "iguales"
Después de terminar el juego, debe determinarse quién es el ganador.
Debe ser posible obtener la puntuación de cualquier de los jugadores en cualquier momento del partido.
Fuente original: http://codingdojo.org/cgi-bin/wiki.pl?KataTennis