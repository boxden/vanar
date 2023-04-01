/*
1) events
2) cookie, localStorage. sessionStorage
3) DOM elements
4) sprites+js
*/

// Эта переменная запоминает карту
// 30rows x 40columns
var map = {
  legend: {
    free:   0,
    wall:   1,
    person: 2,
    bomb:   3,
    money:  4,
    shield: 5
  },
  rows: 30,
  cols: 40,
  territory: [],
  generateMap: function(){
    for (var r=0 ; r<this.rows; r++){
      var row = [];
      for( var c=0; c<this.cols; c++){
          row[c] = 0; // write free space on the entire map
      }
      this.territory[r]=row;
    }
    var pr = parseInt( Math.random() * this.rows);
    var pc = parseInt( Math.random() * this.cols);
    this.territory[pr][pc] = 2;

    // 10 bomb
    var bombs = 10;
    while (bombs>0) {
      var pr = parseInt(Math.random() * this.rows );
      var pc = parseInt(Math.random() * this.cols );
      if (this.territory[pr][pc] == this.legend.free) {
        this.territory[pr][pc] = this.legend.bomb;
        bombs--;
      }
    }
    // random 10 раз повторить код
    // 5 shild
    var shield = 5;
    while (shield>0) {
      var pr = parseInt(Math.random() * this.rows );
      var pc = parseInt(Math.random() * this.cols );
      if (this.territory[pr][pc] == this.legend.free) {
        this.territory[pr][pc] = this.legend.shield;
        shield--;
      }
    }
    // 25 money
  },
  showMap:     function(){
    //
    var stage = document.getElementById("stage");
    // stergem divurile din interior
    stage.innerHTML = "";
    // Обновляем размер сцены
    var w = this.cols * 24;
    var h = this.rows * 24;
    stage.style.width = w + "px";
    stage.style.height = h + "px";
    for (var r=0 ; r<this.rows; r++){
      for( var c=0; c<this.cols; c++){
        var div = document.createElement("div"); //cream un div nou
        if( this.territory[r][c] == this.legend.free ){
            div.className = "free";
        }
        if( this.territory[r][c] == this.legend.person ){
            div.className = "person";
        }
        if (this.territory[r][c] == this.legend.bomb){
            div.className = "bomb";
        }
        if (this.territory[r][c] == this.legend.shield){
            div.className = "shield";
        }
        if (this.territory[r][c] == this.territory.money){
            div.className = "money";
        }
        stage.appendChild( div );
      }
    }
  },
  moveRight: function(){
    for (var r=0;r<this.rows; r++) {
      for (var c=0; c<this.cols; c++) {
        if (this.territory[r][c] == this.legend.person && r < this.rows - 1) {
          this.territory[r][c] = this.legend.free;
          this.territory[r][c+1] = this.legend.person;
        }
      }
    }
  },
  moveUp: function(){
    for (var r=0;r<this.rows; r++) {
      for (var c=0; c<this.cols; c++) {
        if (this.territory[r][c] == this.legend.person && r < this.rows - 1) {
          this.territory[r][c] = this.legend.free;
          this.territory[r-1][c] = this.legend.person;
        }
      }
    }
  },
  moveDown: function(){
    // 1) найди персонажа
    for (var r=0 ; r<this.rows; r++){
      for( var c=0; c<this.cols; c++){
        if ( this.territory[r][c] == this.legend.person && r < this.rows - 1){
          // a) free the space before
          this.territory[r][c] = this.legend.free;
          // b) move to one down
          this.territory[r+1][c] = this.legend.person;
          return ; // exit the function
        }
      }
    }
  },
  moveLeft: function(){
    for (var r=0;r<this.rows; r++) {
      for (var c=0; c<this.cols; c++) {
        if (this.territory[r][c] == this.legend.person && r < this.rows - 1) {
          this.territory[r][c] = this.legend.free;
          this.territory[r][c-1] = this.legend.person;
        }
      }
    }
  }
};
function onKey( event ){
  if (event.keyCode == 40) map.moveDown();
  console.log( event );
  if (event.keyCode == 38) map.moveUp();

  if (event.keyCode == 37) map.moveLeft();

  if (event.keyCode == 39) map.moveRight();
  map.showMap();
}

map.generateMap();
map.showMap();
/// dz
