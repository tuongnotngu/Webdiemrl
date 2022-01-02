#include<bits/stdc++.h>
using namespace std;
string a;
long L,ans;
int main()
{
    freopen("REPETITIONS.INP","r",stdin);
    freopen("REPETITIONS.OUT","w",stdout);
    cin>>a;
    L=1;
    ans=1;
    for(long i=0;i<a.size();i++)
    {
        if(a[i]==a[i+1]) L++;
        else if(L>ans)
        {
            ans=L;
            L=1;
        }
    }
    cout<<ans<<endl;
}
