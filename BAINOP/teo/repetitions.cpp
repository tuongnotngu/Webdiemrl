#include<bits/stdc++.h>
using namespace std;
string s;
int m,i,dem;
int main()
{
    freopen("repetitions.inp","r",stdin);
    freopen("repetitions.out","w",stdout);
    getline(cin,s);m=0; dem=1;
    for(i=1;i<s.size();i++)
    {
        if (s[i]==s[i-1]) dem=dem+1;
        else dem=1;
        m=max(m,dem);
    }
    cout<<m;
}
