package main

import "fmt"

type single struct {
        O interface{};
}

var instantiated *single = nil

func New() *single {
        if instantiated == nil {
                instantiated = new(single);
        }
        return instantiated;
}

func main() {
    
    s1 := New()
    s2 := New()
    if (s1 == s2){
       fmt.Println("same")
    }else{
	fmt.Println("different")
    }
    
}