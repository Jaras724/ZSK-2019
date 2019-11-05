#include <iostream>

using namespace std;

int main()
{
    char tekst[] = "informatyka";
    char p[5];
    char n[6];
    int x=0;
    int z=0;
    for(int i=0;i<11;i++)
    {
        if(i%2==0)
        {
            p[x]=tekst[i];
            x++;
        }
        else
        {
            n[z]=tekst[i];
            z++;
        }
    }
    for(int i=0;i<x;i++)
        cout<<p[i];
    for(int i=0;i<z;i++)
        cout<<n[i];
    return 0;
}
