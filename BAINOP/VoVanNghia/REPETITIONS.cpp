#include<bits/stdc++.h>
using namespace std;
string n;
long long dem, ans, s, i;
int main()
{
    freopen("REPETITIONS.INP","r",stdin);
    freopen("REPETITIONS.OUT","w",stdout);
    cin>>n;
    n+=" ";
    dem=n.length();
    s=1;
    for(int i=0;i<dem;i++)
    {
        if (n[i]==n[i-1]) s++;
        else
        {
            ans=max(ans,s);
            s=1;
        }
    }
    cout<<ans;
}
