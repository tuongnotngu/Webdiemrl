#include<bits/stdc++.h>
using namespace std;
string a;
int L,ans;
int main()
{
    freopen("REPETITIONS.INP","r",stdin);
    freopen("REPETITIONS.OUT","w",stdout);
    cin>>a;
    L=1;
    ans=1;
    for(int i=0;i<a.size()-1;i++)
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
