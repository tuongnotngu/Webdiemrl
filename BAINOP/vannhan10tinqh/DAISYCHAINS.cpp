#include<bits/stdc++.h>
using namespace std;
short n,Ptb,l,r,mid,sav;
short P[1000];
short P1[1000];
int ans;
int main()
{
    freopen("DAISYCHAINS.INP","r",stdin);
    freopen("DAISYCHAINS.OUT","w",stdout);
    cin>>n;
    ans=0;
    for(short i=0;i<n;i++)
        cin>>P[i];
    for(short i=0;i<n;i++)
        for(short j=i;j<n;j++)
        {
            Ptb=0;
            for(short k=i;k<=j;k++)
            {
                Ptb+=P[k];
                P1[k-i]=P[k];
            }
            sav=j-i;
            Ptb=Ptb/(j-i+1);
            sort(P1,P1+sav);
            l=i;
            r=j;
            while(l<=r)
            {
                mid=(l+r)/2;
                if(P[mid]>Ptb) l=mid-1;
                else if(P[mid]<Ptb) r=mid+1;
                else
                {
                    l=r+1;
                    ans++;
                    break;
                }
            }
        }
    cout<<ans<<endl;
}
