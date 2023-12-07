# Verziókezelés
## Helyi repository létrehozása.

- Inicializálás;
    > git init
- Verzió ellenőrzés;
    > git status
- Előkészítjük az eltárolásra(commit-re);
    > git add .
- Verzió ellenőrzés újra;
    > git status
- Helyi gépen felhasználói fiók ellenőrzés(username,email);
    > git config user.name

    > git config user.email
- Eltárolás új verzióként;
    > git commit -m "first commit"

## Összekapcsolás a távoli repository-val.

### GitHub repository létrehozása

- Távoli és helyi összekapcsolása;
    > git remote add origin https://token@github.com/hszdavid971/TKorpusz.git
- Melyik ágat használjuk ( master-egyedül / main-csapatban);
    >git push -u origin master

## További verzió feltöltésnél;
- Push-t használunk;

    > git push -u origin master
