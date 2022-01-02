#include<bits/stdc++.h>
using namespace std;
string a;
 long int d,maxx,i;
int main()
{
    freopen("repetitions.inp","r",stdin);
    freopen("repetitions.out","w",stdout);
    getline(cin,a);
    d=1;
    maxx=1;
    for(i=0;i<a.size();i++)
    {
        if(a[i]==a[i+1]) d++;  else {maxx=max(maxx,d); d=1;}
    }
    cout<<maxx;

}
