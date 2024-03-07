# kata-fight

**Kata 30 per l'especialitat fullstackPHP 7-3-24**

Imagina que hem de crear joc de lluita. En aquest joc tenim:
- **Lluitadors**: Cadascun amb un nom, vida(0 a 10, comença amb 10), força(1 a 10),defensa(1 a 10).
- **Batalles**: Cada batalla té dos lluitadors. El combat funciona de la següent manera, mentre no ha acabat el combat:
- Es compara la força dels dos lluitadors. Si la força és:
   - *igual*: hi ha un 50% de possibilitats que l’atac tingui éxit per un lluitador o l’altre.
   - Lluitador 1 té més força: 70% de possibilitats de que l’atac tingui èxit al lluitador 1 i 30% el lluitador 2.
   - Lluitador 2 té més força: El mateix però a l’inrevés.
   - Cada cop que un lluitador té èxit en l’atac, es resta tanta vida al rival com: Força té el lluitador que ha atacat amb èxit – defensa lluitador atacat.
   Per exemple, si el lluitador que ha atacat amb èxit té 6 de força i el lluitador atacat té 4 de defensa, rep 2 de dany.
- Si el resultat d’aquesta operació és igual o menor que 0, rep 1 de dany.
- El combat acaba quan un dels dos lluitadors té la vida a 0. S’anuncia el guanyador/a llavors
