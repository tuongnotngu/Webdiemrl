#include<bits/stdc++.h>
using namespace std;
long long i, d=0;maxx=0;
string a;
int main()
{   freopen("REPETITIONS.inp","r",stdin);
    freopen("REPETITIONS.out","w",stdout);
    getline(cin,a);

    for(i=0;i<=a.size();i++)
       if(a[i]==a[i-1]) {d++;}
    else
        maxx=max(maxx,d);
    d=1;
     cout<<maxx;
}
