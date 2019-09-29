import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {

  public tiposUsuarios: any[];
  public emprestimo: any;

  constructor(){
    this.tiposUsuarios = [
      {
        id: 1,
        descricao: 'Professor',
        diasEmprestimo: 10
      },
      {
        id: 2,
        descricao: 'Aluno',
        diasEmprestimo: 3
      }
    ];

    this.emprestimo = {};
  }

  public limparCampos() {
    this.emprestimo = {};
  }

}
