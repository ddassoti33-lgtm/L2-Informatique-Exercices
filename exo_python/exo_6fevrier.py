# 1. Créer une liste vide
eleves = []

# 2. Répéter l'opération pour 3 élèves
for i in range(3):
    print(f"\nÉlève {i + 1}")
    nom = input("Nom de l'élève : ")
    moyenne = float(input("Moyenne de l'élève : "))

    # 3. Ajouter les infos dans la liste
    eleve = {
        "nom": nom,
        "moyenne": moyenne
    }
    eleves.append(eleve)

# 5. Affichages
print("\n--- TOUS LES ÉLÈVES ---")
for e in eleves:
    print(f"{e['nom']} - Moyenne : {e['moyenne']}")

print("\n--- ÉLÈVES ADMIS (moyenne ≥ 10) ---")
for e in eleves:
    if e["moyenne"] >= 10:
        print(f"{e['nom']} - {e['moyenne']}")

print("\n--- ÉLÈVES AJOURNÉS (moyenne < 10) ---")
for e in eleves:
    if e["moyenne"] < 10:
        print(f"{e['nom']} - {e['moyenne']}")