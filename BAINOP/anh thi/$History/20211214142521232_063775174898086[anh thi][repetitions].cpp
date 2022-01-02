#include <bits/stdc++.h>
using namespace std;
string s;
long i,maxx,dem;
int main()
{
    getline(cin,s);
    for(i=0;i<s.size();i++)
    if(s[i]==s[i-1]) dem++;
    maxx=max(maxx,dem);dem=1;
    cout<<maxx;
}
