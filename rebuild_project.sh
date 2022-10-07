#!/bin/bash
echo "Gerando imagens......"

docker build -t luizmachado/desafio5_backend:1.0 backend/.
docker build -t luizmachado/desafio5_database:1.0 database/.

echo "Enviando imagens para DockerHub....."
docker push luizmachado/desafio5_backend:1.0
docker push luizmachado/desafio5_database:1.0

echo "Criando serviços no cluster....."
kubectl apply -f ./services.yml

echo "Realizando deploy da aplicação....."
kubectl apply -f ./deployment.yml
