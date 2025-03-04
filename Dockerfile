

# Utilisation d'une image Node.js
FROM node:14

# Définition du répertoire de travail
WORKDIR /app

# Copie des fichiers Angular et Node.js
COPY     ./deployApp/  ./angular-app
COPY     ./deployApi/ ./nodejs-app
 
#un Installation des dépendances de l'application Node.js
# RUN cd nodejs-app && npm install

# Construction de l'application Angular
RUN cd angular-app && npm install && npm run build --prod

# Exposition du port 80
EXPOSE 80

# Démarrage du serveur Node.js
CMD ["node", "nodejs-app/server.js"]
