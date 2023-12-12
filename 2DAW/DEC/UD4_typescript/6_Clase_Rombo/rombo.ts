class Rombo {
    diagonalH:number;
    diagonalV:number;

    constructor(diagonalH: number, diagonalV: number){
        this.diagonalH = diagonalH;
        this.diagonalV = diagonalV;
    }

    getCalcular(): number {
        return this.diagonalH * this.diagonalV;
    }
}
const rombo1 = new Rombo(5, 6);
console.log(rombo1.getCalcular())