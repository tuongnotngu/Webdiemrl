#include<bits/stdc++.h>

using namespace std;

int main()
{
    freopen("REPETITIONS.INP","r",stdin);
    freopen("REPETITIONS.OUT","w",stdout);
    long long int ans,k;
    string s;
    cin>>s;
    k=1;ans=0;
    for(int i=0;i<=s.size()-1;i++)
    {
        if(s[i]==s[i+1]) {k+=1;continue;}
        else if(s[i]!=s[i+1]) if (k>ans) {ans=k;k=1;}
        else k=1;
    }
    cout<<ans;
}
