#include<stdio.h>
#include<string.h>
#include<stdlib.h>

int check_authentication(char *password){
    int auth =0;
    char password_buffersize[10];
    strcpy(password_buffersize,password);
    if(strcmp(password_buffersize, "brillingse")==0)
        auth = 1;
    if(strcmp(password_buffersize, "helloorang")==0)
        auth = 1;
    return auth;
}

int main(){
    char input[20];
    printf("Enter a string: ");
    scanf("%19s", input); 
    if(check_authentication(input)){
        printf("\n ==================  \n");
        printf("       Access grant.\n");
        printf("\n ==================  \n");
    }else{
        printf("\n ==================  \n");
        printf("       Access denied.\n");
        printf("\n ==================  \n");
    }
}