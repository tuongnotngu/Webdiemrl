#include<bits/stdc++.h>
using namespace std;
using ll=long long;

int main()
{
    freopen("repetitions.inp","r",stdin);
    freopen("repetitions.out","w",stdout);
    string s;ll k,ans;
    k=1;ans=1;
    getline(cin,s);
    for(ll i=0;i<s.size();i++)
    {
        if(s[i]=='A'||s[i]=='C'||s[i]=='G'||s[i]=='T')
        if (s[i]==s[i+1]) {k+=1;continue;}
        else if(k>ans) {ans=k;k=1;}
        else k=1;
        k=1;
    }
    cout<<ans;
}
