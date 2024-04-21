FROM node:18-alpine

WORKDIR /app

COPY package*.json .
RUN npm install

# Copy existing .next directory (if any)
COPY .next ./.next  

COPY . .

EXPOSE 3000

RUN npm run build

CMD ["npm", "start"]
