<?php


class ahorcado {
    private $palabra;
    private $vidas;
    private $completando;
    function __construct($word,$lifes){
        $this->palabra=$word;
        $this->vidas=$lifes;
        $this->completando=$word;
        
        $i=0;
        while($i<strlen($word)){
            $this->completando[$i]='_';
            $i+=1;
        }
    }
    function vidasRestantes(){
        return $this->vidas;
    }
    function mostrar(){
        //retorna la palabra que se esta completando
        return $this->completando;
    }
    function jugar($letter){
        $found=strpos($this->palabra,$letter);
        if($found===false){
            $this->vidas-=1;
            return;
        }
        
        for($i=0;$i<strlen($this->completando);$i++){
            if($this->completando[$i]==='_'&&$this->palabra[$i]===$letter){
                $this->completando[$i]=$letter;
            }
    
        }
                
    }
    function won(){
        for($i=0;$i<strlen($this->completando);$i++){
            if($this->completando[$i]!==$this->palabra[$i]){
                return false;
            }
        }
        return true;
    }
    function lost(){
        return $this->completando!==$this->palabra and $this->vidas===0;
    }

}
