#!/bin/bash

echo "--------------------------------------------";
echo "sauvegarde en cours";
echo "--------------------------------------------";
echo "";

echo "création de l'archive";

tar -cvzf backup.tar.gz ~/Bureau/Simplon
echo "--------------------------------------------";
echo "";

echo "vérification de l'existence de l'archive";
if [ -e backup.tar.gz ]
then
echo ""
echo "archive créée avec succés";
echo ""
else
echo ""
echo "problème lors de la création de l'archive";
echo ""
fi

echo "### Fin de la sauvegarde ###";
