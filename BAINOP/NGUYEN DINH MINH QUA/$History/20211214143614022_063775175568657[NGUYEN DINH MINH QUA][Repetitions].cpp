#include<bits/stdc++.h>
using namespace std;
using ll=long long;

int main()
{
    freopen("repetitions.inp","r",stdin);
    freopen("repetitions.out","w",stdout);
    string s;ll k,ans;
    k=1;ans=1;
    cin>>s;
    for(ll i=0;i<=s.size();i++)
    {
        if(s[i]==s[i+1]) k+=1;
        else if(k>ans) {ans=k;k=1;}
        else k=1;
    }
    cout<<ans;
}
