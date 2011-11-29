#include <stdlib.h>
#include <stdio.h>
#include <string.h>

void copie(char* string){
  char buffer [1024];
  strcpy(buffer, string);
}
int main(int argc, char* argv[]){
  if(argc > 1)
    copie(argv[1]);
  printf("done....\n");
  return 0;
}
