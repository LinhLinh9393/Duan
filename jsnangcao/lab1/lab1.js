const game = {
  team1: 'Bayer Munich',
  team2: 'Dortmund',
  players: [
      [
          'Neuer',
          'Pavard',
          'Martinez',
          'Alaba',
          'Davies',
          'Kimmich',
          'Goretzka',
          'Coman',
          'Muller',
          'Gnarby',
          'Lewandowski',
      ],
      [
          'Burki',
          'Schulz',
          'Hummels',
          'Akanji',
          'Hakimi',
          'Weigl',
          'Witsel',
          'Hazard',
          'Brandt',
          'Sancho',
          'Gotze',
      ]
  ],
  score: '4:0',
  scored: ['Lewandowski','Gnarby','Lewandowski','Muller'],
  date: '01/01/2024',
  odds: {
      team1: 1.33,
      x: 3.25,
      team2: 6.5
  }
};
  
 //Lab1.1
// 1. Tạo mảng cầu thủ
// const player1 = game.players[0];
// const player2 = game.players[1];
const [player1, player2] = game.players;
console.log(player1, player2);
// 2. Danh sách cầu thủ
const [gk1, ... fieldPlayers1] = player1; console.log(gk1, fieldPlayers1);
const [gk2, ... fieldPlayers2] = player2; console.log(gk2, fieldPlayers2);
// 3. Danh sách tất cả các cầu thủ
const allPlayers = [...player1,...player2]; console.log(allPlayers);
// 4. Hiển thị danh sách cầu thủ của Bayer
const players1Final = [... player1, 'Thiago', 'Coutinho', 'Perisic']; console.log(players1Final);
// 5. Cấu trúc lại thuộc tinh odds
const {odds: {team1, x: draw, team2}} = game;
console.log(team1, draw, team2);
// 6. Hiển thị tên các cầu thủ ghi bàn
const printGoals = function(...player){ console.log(player);
}
printGoals(...game.scored);

// 7. In ra đội chiến thắng
// if(team1 < team2){
// console.log("Team 1 sẽ thắng");
  // }
  team1 < team2 && console.log("Team 1 sẽ thắng");
  // Lab 1.2
  //1. Hiển thị cầu thủ ghi bàn
  
  for(const [i, player] of game.scored.entries()) {
     console.log(`Bàn ${1+1}: ${player}`);
  }
  
  // 2. Tinh tỉ lệ chấp trung bình
  let sum = 0;
  const odds = Object.values(game.odds);
  console.log(odds);
  for (const item of odds) {
    sum += item;
  }
  console.log(`Tỉ lệ chấp trung bình: ${sum/odds.length}`);
  // 3. Hiển thị lại tỉ lệ thắng
  const odds1 = Object.entries (game.odds);
for (const [team, odd] of odds1) {
let str = (team == 'x') ? 'hòa của draw' : `thắng của ${game[team]}`;
console.log(`Tỉ lệ ${str}: ${odd}`);
}

// 4. Hiển thị số bàn thắng mà cầu thủ ghi được
const scorers = {};
const scored = game.scored;
console.log(scored);
for (let i = 0; i < scored.length; i++) {
count = 0;
for (let j = 0; j < scored.length; j++) {
if(scored[i] == scored[j]){ count++;
}
}
scorers [scored[i]] = count;
}
console.log(scorers);