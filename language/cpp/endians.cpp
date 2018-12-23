#include<stdio.h>

int main() {
    char *a;
    int b = 0x12345678;

    a = (char*)&b;

    printf("%x\n", *a);
    printf("%x\n", *(--a));
    printf("%x\n", *(++a));

}
