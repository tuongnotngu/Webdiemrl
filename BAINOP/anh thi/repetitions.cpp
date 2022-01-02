#include <bits/stdc++.h>
using namespace std;
string s;
long i,maxx=0,dem=0;
int main()
{freopen("Repetitions.inp","r",stdin);
freopen("Repetitions.out","w",stdout);
    getline(cin,s);
    for(i=0;i<s.size();i++)
    if(s[i]==s[i-1]) {dem++;}
    else {maxx=max(maxx,dem);}
     dem=1;
    cout<<maxx;
}
