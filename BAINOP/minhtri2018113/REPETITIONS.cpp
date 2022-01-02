#include<bits/stdc++.h>
using namespace std;
int main()
{
    freopen("repetitions.inp","r",stdin);
    freopen("repetitions.out","w",stdout);
    string a;
    getline(cin,a);
    int da=0;
    int dc=0;
    int dg=0;
    int dt=0;
    for (int i=0;i<a.size();i++)
    {
        if(a[i]=='A') da++;
        if(a[i]=='C') dc++;
        if(a[i]=='G') dg++;
        if(a[i]=='T') dt++;
    }
    int b[4]={da,dc,dg,dt};
    sort (b,b+4);
    cout << b[3];

}
