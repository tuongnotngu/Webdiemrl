#include<bits/stdc++.h>
using namespace std;
int main()
{
    freopen("repetitions.inp","r",stdin);
    freopen("repetitions.out","w",stdout);
    string a;
    getline(cin,a);
    int j;
    int i=0;
    int tam=0;
    while(i<a.size()-1)
    {
        int dem=1;
        for( j=i+1;j<a.size();j++)
        {
            if(a[i]==a[j])
                dem=dem+1;
            else
            {
                if(dem>=tam) {tam=dem;}

            }
         }
        i=j;
    }
    cout << tam;


}
