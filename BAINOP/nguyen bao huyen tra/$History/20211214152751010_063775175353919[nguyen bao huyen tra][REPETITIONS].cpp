#include<bits/stdc++.h>
using namespace std;
long long i,d ,maxx;
string a;
int main()
{   freopen("REPETITIONS.inp","r",stdin);
    freopen("REPETITIONS.out","w",stdout);
    getline(cin,a);d=0;
    for(i=0;i<=a.size();i++)
       if(a[i]==a[i-1]) {d++;}
     maxx=max(maxx,d);
     cout<<maxx;

}
